<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.9.0/ui-bootstrap-tpls.min.js"></script>
<div id="container" ng-app="myApp" >
 <section>
 <form class="form-inline" ng-controller="FormController" ng-submit="submitForm()" role="form" method="post">
 <div class="form-group">
 <label class="sr-only" for="Source Station">Insert Your Name</label>
 <input type="text" ng-model="name" placeholder="John" class="form-control" >
 </div>
 <div class="form-group">
 <label class="sr-only" for="Source Station">Insert Your City</label>
 <input type="text" ng-model="city" placeholder="Perth" class="form-control" >
 </div>
 <button type="submit" class="btn btn-primary">Submit Record</button>
<pre>{{message}}</pre>
</form>
</section>
</div>
