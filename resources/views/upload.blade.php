<form method="POST" action="uploadfile" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file"/> <br/><br/>    
    <button type="submit"> Upload File </button>    
</form>
