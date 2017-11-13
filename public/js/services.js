/**
 * dataTableSvc - Service
 * General Service Provider for Customer Portal DataTables
 * 
 */
function dataTableSvc(){

    this.FruitTableInit = function(FruitsTable, tableData){
        var table = FruitsTable.DataTable({
            columnDefs: [
                {"className": "text-center", "targets": "_all"}
            ],
            pageLength: 10,
            responsive: true,
            data: tableData,
            columns: [
                { data: "name" },
                { data: "description" },
                { data: "price" },
                { data: "special_offer" },
                { data: 'id' },
            ],
            createdRow: function(row, data, idx){
                var href = window.location.pathname+"/transactions/create";
                $('td', row).eq(5).html('<a target="_blank" href='+href+'><i class="fa fa-file"></i> Add</a>');
            }
        });       
    }


    this.superjackpotlotteryTableInit = function(lotteryTable, tableData){
        var table = lotteryTable.DataTable({
            columnDefs: [
                {"className": "text-center", "targets": "_all"}
            ],
            pageLength: 10,
            responsive: true,
            data: tableData,
            columns: [
                { data: "name" },
                { data: "description" },
                { data: "price" },
                { data: "range" },
            ],
            createdRow: function(row, data, idx){
                
            }
        });       
    }

}

/**
 * sessionSvc - Service
 * General Service Provider for Session Handling
 * 
 */
function sessionSvc(encodeSvc, $state){

    /**
     * this.setSessionLocalStorage - function()
     * Set session items to LocalStorage
     * 
     */
    this.setSessionLocalStorage = function(data){
        angular.forEach(data, function(value, key){
            localStorage.setItem(encodeSvc.decode(key), encodeSvc.decode(value));
        });
    }

    /**
     * this.logOutUser - function()
     * Remove session items to LocalStorage & logs user out (redirect to login page)
     * 
     */
    this.logOutUser = function(msg){
        localStorage.clear();
        $state.go('login');
    }
}

/**
 * encodeSvc - Service
 * General Service Provider for Encoding / Decoding Data
 * 
 */
function encodeSvc(){

    /**
     * this.encode - function()
     * Encode input to Base64
     * 
     */
    this.encode = function(data){
        return window.btoa(window.btoa(data));
    }

    /**
     * this.decode - function()
     * Decode Base64 input 
     * 
     */
    this.decode = function(data){
        return window.atob(window.atob(data));
    }
}

angular
    .module("portalApp")
    .service("dataTableSvc", dataTableSvc)
    .service("sessionSvc", sessionSvc)
    .service("encodeSvc", encodeSvc)
