<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vue.js PHP fetchAll Data from Mysql Database</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  <div class="container" id="fetchAlldiv">
   <br />
   <h3 align="center">Vue.js PHP fetchAll Data from Mysql Database</h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
       <h3 class="panel-title"> Employee Records</h3>
     </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped">
           <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Edit</th>
            <th>Delete</th>
           </tr>
           <tr v-for="row in allData">
            <td>{{ row.name }}</td>
            <td>{{ row.position }}</td>
            <td>{{ row.office }}</td>
            <td><button type="button" name="edit" class="btn btn-primary btn-xs edit">Edit</button></td>
            <td><button type="button" name="delete" class="btn btn-danger btn-xs delete">Delete</button></td>
           </tr>
          </table>
        </div>
    </div>
   </div>
  </div>
<script src="js_fetchdata.js"></script>
</body>
</html>