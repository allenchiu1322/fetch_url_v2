@extends('fetch_url/master')

@section('content')
      <div id="main" class="starter-template">
<form>
  <div class="form-group">
    <label for="txtUrl">url</label>
    <input type="text" class="form-control" id="txt_url" placeholder="https://">
  </div>
  <button type="submit" id="btn_submit" class="btn btn-default">送出</button>
</form>
<div>
    <label>結果</label>
<div id="result"></div>
</div>
      </div>
@endsection
