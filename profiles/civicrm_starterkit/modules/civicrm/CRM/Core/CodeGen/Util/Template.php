<?php

/**
 * Class CRM_Core_CodeGen_Util_Template
 */
class CRM_Core_CodeGen_Util_Template {
  protected $filetype;

  protected $smarty;
  protected $beautifier;

  /**
   * @var bool
   */
  protected $beautify;

  /**
   * @param string $filetype
   * @param bool $beautify
   */
  public function __construct($filetype, $beautify = TRUE) {
    $this->filetype = $filetype;

    $this->smarty = CRM_Core_CodeGen_Util_Smarty::singleton()->createSmarty();

    $this->assign('generated', "DO NOT EDIT.  Generated by CRM_Core_CodeGen");

    if ($this->filetype === 'php' && $beautify) {
      require_once 'PHP/Beautifier.php';
      // create an instance
      $this->beautifier = new PHP_Beautifier();
      $this->beautifier->addFilter('ArrayNested');
      // add one or more filters
      $this->beautifier->setIndentChar(' ');
      $this->beautifier->setIndentNumber(2);
      $this->beautifier->setNewLine("\n");
    }

    $this->beautify = $beautify;
  }

  /**
   * @param array $inputs
   *   Template filenames.
   * @param string $outpath
   *   Full path to the desired output file.
   */
  public function runConcat($inputs, $outpath) {
    if (file_exists($outpath)) {
      unlink($outpath);
    }
    foreach ($inputs as $infile) {
      // FIXME: does not beautify.  Document.
      file_put_contents($outpath, $this->smarty->fetch($infile) . "\n", FILE_APPEND);
    }
  }

  /**
   * Run template generator.
   *
   * @param string $infile
   *   Filename of the template, without a path.
   * @param string $outpath
   *   Full path to the desired output file.
   */
  public function run($infile, $outpath) {
    $contents = $this->smarty->fetch($infile);

    if ($this->filetype === 'php' && $this->beautify) {
      $this->beautifier->setInputString($contents);
      $this->beautifier->process();
      $contents = $this->beautifier->get();

      // The beautifier isn't as beautiful as one would hope. Here's some extra string fudging.
      $replacements = [
        ') ,' => '),',
        "\n  }\n}\n" => "\n  }\n\n}\n",
        '=> true,' => '=> TRUE,',
        '=> false,' => '=> FALSE,',
        'static ::' => 'static::',
        'use\\' => 'use \\',
      ];
      $contents = str_replace(array_keys($replacements), array_values($replacements), $contents);
      $contents = preg_replace('#(\s*)\\/\\*\\*#', "\n\$1/**", $contents);

      // Convert old array syntax to new square brackets
      $contents = CRM_Core_CodeGen_Util_ArraySyntaxConverter::convert($contents);
      // Remove numeric array keys (assuming its non-associative)
      $contents = preg_replace("#  '\\d+' => #", "  ", $contents);
    }
    // Ensure file ends with a newline
    if (substr($contents, -1) !== "\n") {
      $contents .= "\n";
    }
    file_put_contents($outpath, $contents);
  }

  /**
   * Fetch via Smarty.
   *
   * @param string $infile
   *
   * @return string
   */
  public function fetch($infile) {
    return $this->smarty->fetch($infile);
  }

  /**
   * Fetch multiple templates - and concatenate them.
   *
   * @see runConcat
   * @param array $inputs
   *   Template filenames.
   * @return string
   */
  public function fetchConcat($inputs) {
    $buf = '';
    foreach ($inputs as $infile) {
      $buf .= $this->smarty->fetch($infile);
      $buf .= "\n";
    }
    return $buf;
  }

  /**
   * @param $key
   * @param $value
   */
  public function assign($key, $value) {
    $this->smarty->assign_by_ref($key, $value);
  }

}
