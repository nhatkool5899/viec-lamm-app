@if ($paginator->hasPages())
    <nav class="job__page">
        <div>
            @if ($paginator->onFirstPage())
                <div class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true"><i class='bx bx-chevron-left'></i></span>
                </div>
            @else
                <div class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class='bx bx-chevron-left'></i></a>
                </div>
            @endif
        </div>
        <div>
            <p class="page_small small text-muted">
                <span class="page_current fw-semibold">{{ $paginator->currentPage() }}</span> / <span class="fw-semibold">{{ $paginator->lastPage() }}</span> <span class="page_text">trang</span>
            </p>
        </div>
        <div>
            @if ($paginator->hasMorePages())
                <div class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class='bx bx-chevron-right' ></i></a>
                </div>
            @else
                <div class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><i class='bx bx-chevron-right' ></i></span>
                </div>
            @endif
        </div>
    </nav>
@endif
