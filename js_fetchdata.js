var application = new Vue({
    el:'#fetchAlldiv',
        data:{
          allData:'',
    },
    methods:{
        fetchAllData:function(){ //show records
           axios.post('fetchall.php', {
            action:'fetchall'
           }).then(function(response){
            application.allData = response.data;
           });
        }
    }, 
    mounted:function(){
      console.log("heerreee")
      this.fetchAllData();
    }
});