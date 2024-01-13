{{-- laptop display --}}
<div class="card w-full overflow-auto max-h-[70vh] hidden md:block">
    <div class="overflow-x-auto">
        <table class="table table-lg table-pin-rows table-pin-cols">
            <thead>
                <tr>
                    <th>No</th>
                    <td>Semester</td>
                    <td>Tanggal</td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $n=0; ?>
                @foreach($data as $item)
                <?php $n++; ?>
                <tr>
                    <th>{{ $n; }}</th>
                    <td>{{ $item->semester }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                        @include('components.control-button')
                    </td>

                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                      <th>No</th>
                    <td>Semester</td>
                    <td>Tanggal</td>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>