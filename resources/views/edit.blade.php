<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>

        <div class="container" style="margin-top: 50px;">
            <div class="row">


                <div class="col-lg-3">
                    <p>Cover:</p>
                    <form action="/deletecover/{{ $posts->id }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form>
                    <img src="/cover/{{ $posts->cover }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                    <br>



                     @if (count($posts->images)>0)
                     <p>Images:</p>
                     @foreach ($posts->images as $img)
                     <form action="/deleteimage/{{ $img->id }}" method="post">
                         <button class="btn text-danger">X</button>
                         @csrf
                         @method('delete')
                         </form>
                     <img src="/images/{{ $img->image }}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset="">
                     @endforeach
                     @endif

                </div>


                <div class="col-lg-6">
                    <h3 class="text-center text-danger"><b>Udate Post</b> </h3>
				    <div class="form-group">
                        <form action="/update/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("put")
                         <input type="text" name="title" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
        				 <input type="text" name="author" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                         <Textarea name="body" cols="20" rows="4" class="form-control m-2" placeholder="body">{{ $posts->body }}</Textarea>
                         <label class="m-2">Cover Image</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="cover">

                         <label class="m-2">Images</label>
                         <input type="file" id="input-file-now-custom-3" class="form-control m-2" name="images[]" multiple>

                        <button type="submit" class="btn btn-danger mt-3 ">Submit</button>
                        </form>
                   </div>
                </div>
            </div>



         </body>
</html>









