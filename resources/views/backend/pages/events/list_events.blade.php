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
                                Event Name
                            </th>
                            <th>
                                Start Date
                            </th>
                            <th>
                                End Date
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $dem = 1; ?>
                        @if ($pages->count() > 0)
                            @foreach ($pages as $event)
                                <tr>
                                    <td>
                                        <?php echo $dem++; ?>
                                    </td>
                                    <td>
                                        {{ $event->name }}
                                    </td>
                                    <td> {{ date('d-m-Y', strtotime($event->startDate)) }}</td>
                                    <td> {{ date('d-m-Y', strtotime($event->endDate)) }}</td>
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
