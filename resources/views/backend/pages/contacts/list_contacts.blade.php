@extends('backend.layouts.app')
@section('title', 'Events')
@section('main-content')
    <div class=" mt-3 ">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">List Events</h1>
            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('events.create') }}" class="btn btn-success button_pages">
                    <i class="fa-solid fa-plus"></i> Thêm mới
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-start">

                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>
                                NO.
                            </th>
                            <th>
                                Full Name
                            </th>
                            <th>
                                Phone Number
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Adress
                            </th>
                            <th>
                                Content
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $dem = 1; ?>
                        @if ($pages->count() > 0)
                            @foreach ($pages as $contact)
                                <tr>
                                    <td>
                                        <?php echo $dem++; ?>
                                    </td>
                                    <td>
                                        {{ $contact->name }}
                                    </td>
                                    <td> {{ $contact->phoneNumber }}</td>
                                    <td> {{ $contact->email }}</td>
                                    <td> {{ $contact->address }}</td>
                                    @foreach ($contact->contact as $content)
                                        <td> {{ $content->content }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="100" class="text-center dulieutrong">Dữ liệu còn trống</td>
                            </tr>

                        @endif
                    </tbody>
                </table>
                <!-- Hiển thị các nút chuyển trang -->
                <div class="pagination-container">
                    <ul class="pagination">
                        @if ($pages->currentPage() > 1)
                            <li>
                                <a href="{{ $pages->previousPageUrl() }}">
                                    Previous
                                </a>
                            </li>
                        @endif

                        @foreach ($pages->getUrlRange(1, $pages->lastPage()) as $page => $url)
                            @if ($pages->currentPage() === $page)
                                <li class="active">
                                    <a>{{ $page }}</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach

                        @if ($pages->currentPage() < $pages->lastPage())
                            <li>
                                <a href="{{ $pages->nextPageUrl() }}">
                                    Next
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
