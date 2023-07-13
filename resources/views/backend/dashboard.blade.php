@extends('backend.layouts.app')
@section('title', 'Báo cáo thống kê')
@section('main-content')
    <div class=" mt-3 ">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="title_pages">Báo Cáo Thống Kê</h1>
            </div>
            <div class="col-lg-6 text-end">
                {{-- <a href="{{ route('events.create') }}" class="btn btn-success button_pages">
                    <i class="fa-solid fa-plus"></i> Thêm mới
                </a> --}}
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
                                Sự Kiện
                            </th>
                            <th>
                                Tổng Vé
                            </th>
                            <th>
                                Đã Bán
                            </th>
                            <th>
                                Vé Tồn
                            </th>
                            <th>Doanh thu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $dem = 1; ?>
                        @if ($pages->count() > 0)
                            @foreach ($pages as $ticket)
                                <tr>
                                    <td>
                                        <?php echo $dem++; ?>
                                    </td>
                                    <td>
                                        {{ $ticket->event->name }}
                                    </td>
                                    <td>
                                        {{ $tongvebandau }}
                                    </td>
                                    <td>
                                        {{ $tongvedat }}
                                    </td>
                                    <td>
                                        {{ $veton }}
                                    </td>
                                    <td>
                                        {{ $doanhthu }} VND
                                    </td>

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
