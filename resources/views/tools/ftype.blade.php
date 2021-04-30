

  @if(Session::has('success'))
  <div class="alert alert-success">{{Session::get('success')}}</div>
  @endif
  
<form method="post" action="{{url('addtype')}}">

@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name = "typetitle" id="exampleFormControlInput1" placeholder="Title Put Here">
    @error('typetitle')
    <small class="form-text form-danger">{{$errmsg}}</small>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Lit MSG</label>
    <select class="form-control" name ="typelit_msg" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    @error('typelit_msg')
    <small class="form-text form-danger">{{$errmsg}}</small>
    @enderror
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Full MSG</label>
    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
    @error('msg')
    <small class="form-text form-danger">{{$errmsg}}</small>
    @enderror
  </div>

  <div class="form-group">
    <input type="submit" value="Submit" class="btn btn-success">
  </div>
</form>