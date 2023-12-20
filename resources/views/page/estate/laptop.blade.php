{{-- laptop display --}}
<div class="card w-full overflow-auto max-h-[70vh] hidden md:block">
    <div class="overflow-x-auto">
        <table class="table table-lg table-pin-rows table-pin-cols">
            <thead>
                <tr>
                    <th>No</th>
                    <td>Estate</td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $n=0; ?>
                @foreach($data as $item)
                <?php $n++; ?>
                <tr>
                    <th>{{ $n; }}</th>
                    <td>{{ $item->estate }}</td>
                    <td>
                        @include('page.estate.control-button')
                    </td>
                    @include('page.estate.edit')
                    @include('page.estate.delete')
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <td>Estate</td>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>