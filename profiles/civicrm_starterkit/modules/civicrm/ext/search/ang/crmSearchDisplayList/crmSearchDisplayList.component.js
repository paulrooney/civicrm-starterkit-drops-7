(function(angular, $, _) {
  "use strict";

  angular.module('crmSearchDisplayList').component('crmSearchDisplayList', {
    bindings: {
      apiEntity: '<',
      apiParams: '<',
      settings: '<',
      filters: '<'
    },
    require: {
      afFieldset: '?^^afFieldset'
    },
    templateUrl: '~/crmSearchDisplayList/crmSearchDisplayList.html',
    controller: function($scope, crmApi4, searchDisplayUtils) {
      var ts = $scope.ts = CRM.ts(),
        ctrl = this;
      this.page = 1;

      this.$onInit = function() {
        this.apiParams = _.cloneDeep(this.apiParams);
        this.apiParams.limit = parseInt(this.settings.limit || 0, 10);
        this.columns = searchDisplayUtils.prepareColumns(this.settings.columns, this.apiParams);
        $scope.displayUtils = searchDisplayUtils;
        if (this.afFieldset) {
          $scope.$watch(this.afFieldset.getFieldData, this.getResults, true);
        }
        $scope.$watch('$ctrl.filters', ctrl.getResults, true);
      };

      this.getResults = _.debounce(function() {
        var params = searchDisplayUtils.prepareParams(ctrl);

        crmApi4(ctrl.apiEntity, 'get', params).then(function(results) {
          ctrl.results = results;
          ctrl.rowCount = results.count;
        });
      }, 100);

      $scope.formatResult = function(row, col) {
        var value = row[col.key],
          formatted = searchDisplayUtils.formatSearchValue(row, col, value),
          output = '';
        if (formatted.length || (col.label && col.forceLabel)) {
          if (col.label && (formatted.length || col.forceLabel)) {
            output += '<label>' + _.escape(col.label) + '</label> ';
          }
          if (formatted.length) {
            output += (col.prefix || '') + formatted + (col.suffix || '');
          }
        }
        return output;
      };

    }
  });

})(angular, CRM.$, CRM._);
