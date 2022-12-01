<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Post - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Foto</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $post->nama }} " placeholder="Masukkan Nama Anda">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">NIS</label>
                                <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ $post->nis }}" placeholder="Masukkan NIS Anda">
                            
                                <!-- error message untuk title -->
                                @error('nis')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir" value="{{ $post->tempatlahir }}" placeholder="Masukkan NIS Anda">
                            
                                <!-- error message untuk title -->
                                @error('tempatlahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('agama') is-invalid @enderror" name="tanggallahir" value="{{ $post ->tanggallahir }}" >
                            
                                <!-- error message untuk title -->
                                @error('agama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="5" placeholder="Masukkan alamat">
                                    {{ $post ->alamat }}
                                
                                </textarea>
                            
                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Laki-laki" @if ( $post ->jeniskelamin=="Laki-laki") checked @endif >
                                <label class="form-check-label" for="flexRadioDefault1">
                                  Laki-Laki
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="jeniskelamin" value="Perempuan" @if ( $post ->jeniskelamin=="Perempuan") checked @endif>
                                <label class="form-check-label" for="jeniskelamin">
                                  Perempuan
                                </label>
                              </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option class="form-control" value="">-- Silahkan Pilih Agama --
                                   
                                </option>
                                <option class="form-control" value="Islam"  @if ( $post ->agama=="Islam") selected @endif >Islam</option>
                                <option class="form-control" value="Kristen" @if ( $post ->agama=="Kristen") selected @endif>Kristen</option>
                                <option class="form-control" value="Katholik" @if ( $post ->agama=="Katholik") selected @endif>Katholik</option>
                                <option class="form-control" value="Hindu" @if ( $post ->agama=="Hindu") selected @endif>Hindu</option>
                                <option class="form-control" value="Budha" @if ( $post ->agama=="Budha") selected @endif>Budha</option>

                            </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $post->email }}" placeholder="Masukkan Email">
                            
                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Hobi</label>
                                <div class="form-check">
                                <input name="hobi" class="btn-check" type="checkbox" value="Main Musik"  @if ($post->hobi=="Main Musik") checked  @endif > 
                                <label for="">Main Musik</label>
                                </div>
                                <div class="form-check">
                                <input name="hobi" class="btn-check" type="checkbox" value="Main Game" @if ($post->hobi=="Main Game") checked  @endif> 
                                <label for="">Main Game</label>
                            </div>
                            </div>

                            <div class="form-group">    
                                <label class="font-weight-bold" for="favcolor">Pilih Warna Favorit:</label>
                                <input type="color" id="favcolor" name="warna" value="{{ $post->warna }}">

                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>