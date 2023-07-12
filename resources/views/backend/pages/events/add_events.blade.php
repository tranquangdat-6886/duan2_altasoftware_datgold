@extends('backend.layouts.app')
@section('title', 'Events')
@section('main-content')
    <div class=" mt-3 ">

        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">Add Events</h1>
            </div>
            <div class="col-lg-6 text-end">

            </div>
        </div>
        <form action="{{ route('events.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-8 text-start">
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="name" class="form-label label_altasoftware_add mb-0">Tên sự kiện </label>
                            <input type="text" id="name" name="name" class="form-control button_input "
                                placeholder="Nhập tên sự kiện">
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('name'))
                                @foreach ($errors->get('name') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="title" class="form-label label_altasoftware_add mb-0">title </label>
                            <input type="text" id="title" name="title" class="form-control button_input "
                                placeholder="Nhập title ngắn">
                        </div>

                    </div>

                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="passdn" class="form-label label_altasoftware_add">Ảnh Avata</label>
                                <div class="upload-container">
                                    <input type="file" class="form-control" id="avata" name="avatar"
                                        onchange="previewImage(event)" style="z-index: 99999;">
                                    <div class="upload-overlay" id="image-preview" style="z-index: 9999;">
                                        <i class="fas fa-camera"></i>
                                        <span>Chọn ảnh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('avatar'))
                                @foreach ($errors->get('avatar') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <script>
                        function previewImage(event) {
                            var input = event.target;
                            var imagePreview = document.getElementById('image-preview');

                            if (input.files && input.files[0]) {
                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    imagePreview.style.backgroundImage = "url('" + e.target.result + "')";
                                    imagePreview.style.backgroundSize = "cover";
                                    imagePreview.innerHTML = "";
                                };

                                reader.readAsDataURL(input.files[0]);
                            }
                        }
                    </script>
                    <div class="row mb-3">
                        <div class="col-lg-12">
                            <label for="description" class="form-label label_altasoftware_add mb-0">Mô tả </label>
                            <textarea type="text" id="editor" name="description" class="form-control button_input ck-editor-textarea"></textarea>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('description'))
                                @foreach ($errors->get('description') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>

                    <script>
                        class MyUploadAdapter {
                            constructor(loader) {
                                // The file loader instance to use during the upload.
                                this.loader = loader;
                            }

                            // Starts the upload process.
                            upload() {
                                return this.loader.file
                                    .then(file => new Promise((resolve, reject) => {
                                        this._initRequest();
                                        this._initListeners(resolve, reject, file);
                                        this._sendRequest(file);
                                    }));
                            }

                            // Aborts the upload process.
                            abort() {
                                if (this.xhr) {
                                    this.xhr.abort();
                                }
                            }

                            // Initializes the XMLHttpRequest object using the URL passed to the constructor.
                            _initRequest() {
                                const xhr = this.xhr = new XMLHttpRequest();
                                xhr.open('POST', "{{ route('events.store', ['_token' => csrf_token()]) }}", true);
                                xhr.responseType = 'json';
                            }

                            // Initializes XMLHttpRequest listeners.
                            _initListeners(resolve, reject, file) {
                                const xhr = this.xhr;
                                const loader = this.loader;
                                const genericErrorText = `Couldn't upload file: ${ file.name }.`;

                                xhr.addEventListener('error', () => reject(genericErrorText));
                                xhr.addEventListener('abort', () => reject());
                                xhr.addEventListener('load', () => {
                                    const response = xhr.response;
                                    if (!response || response.error) {
                                        return console.log(response && response.error ? response.error.message :
                                            genericErrorText);
                                    }
                                    // resolve({
                                    //     default: response.url
                                    // });
                                    resolve(response);
                                });

                                if (xhr.upload) {
                                    xhr.upload.addEventListener('progress', evt => {
                                        if (evt.lengthComputable) {
                                            loader.uploadTotal = evt.total;
                                            loader.uploaded = evt.loaded;
                                        }
                                    });
                                }
                            }

                            _sendRequest(file) {
                                // Prepare the form data.
                                const data = new FormData();

                                data.append('upload', file);


                                this.xhr.send(data);
                            }
                        }

                        function MyCustomUploadAdapterPlugin(editor) {
                            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                                return new MyUploadAdapter(loader);
                            };
                        }

                        ClassicEditor
                            .create(document.querySelector('#editor'), {
                                extraPlugins: [MyCustomUploadAdapterPlugin],
                                // ...
                            })
                            .catch(error => {
                                console.log(error);
                            });
                    </script>

                    <div class="row mt-3 mb-3">
                        <div class="col-lg-6">
                            <label for="startDate" class="form-label label_altasoftware_add mb-0">Ngày diễn ra </label>
                            <input type="date" id="startDate" name="startDate" class="form-control button_input">
                            <span class="mt-1 mb-0 error">
                                @if ($errors->has('startDate'))
                                    @foreach ($errors->get('startDate') as $message)
                                        <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                    @endforeach
                                @endif
                            </span>
                        </div>
                        <div class="col-lg-6">
                            <label for="endDate" class="form-label label_altasoftware_add mb-0">Ngày kết thúc</label>
                            <input type="date" id="endDate" name="endDate" class="form-control button_input ">
                            <span class="mt-1 mb-0 error">
                                @if ($errors->has('endDate'))
                                    @foreach ($errors->get('endDate') as $message)
                                        <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                    @endforeach
                                @endif
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-select form-select-lg mb-3 button_input" aria-label=".form-select-lg example" name="status">
                                <option selected>Trạng Thái</option>
                                <option value="1">Hoạt Động</option>
                                <option value="0">Ngừng Hoạt Động</option>
                              
                              </select>
                        </div>
                        <span class="mt-1 mb-0 error">
                            @if ($errors->has('status'))
                                @foreach ($errors->get('status') as $message)
                                    <i class="fa-regular fa-circle-exclamation"></i> {{ $message }}
                                @endforeach
                            @endif
                        </span>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 text-end">
                            <a href="{{ route('events.index') }}" class="btn btn-danger button_pages">Hủy bỏ</a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-success button_pages">Thêm</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection
