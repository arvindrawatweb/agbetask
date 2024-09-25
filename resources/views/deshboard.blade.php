

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <h1>Country Data</h1>
    <table id="statesTable" class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>State Name</th>
            
                <th>Cities</th>
            </tr>
        </thead>
    </table>

    <script>
    $(document).ready(function() {
        $('#statesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route("getdata") }}', 
            columns: [
                { data: 'id', name: 'id' },
                { data: 'country_name', name: 'country.name' },
                { data: 'name', name: 'name' },
              
                { data: 'cities', name: 'cities' },
            ]
        });
    });
    </script>
