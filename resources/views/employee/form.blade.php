@section('content')
<form>
    <div class="form-group">
        <label for="exampleInputName">name</label>
        <input type="name" class="form-control" id="exampleInputName" placeholder="name">
    </div>
    <div class="form-group">
        <label for="exampleInputDepartment">Department</label>
        <input type="name" class="form-control" id="exampleInputName" placeholder="部署">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


