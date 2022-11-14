@extends('layouts.template')
 
@section('content')
<table id="kt_datatable_both_scrolls" class="table table-striped table-row-bordered gy-5 gs-7">
    <thead>
        <tr class="fw-semibold fs-6 text-gray-800">
            <th class="min-w-200px">First name</th>
            <th class="min-w-150px">Last name</th>
            <th class="min-w-300px">Position</th>
            <th class="min-w-200px">Office</th>
            <th class="min-w-100px">Age</th>
            <th class="min-w-150px">Start date</th>
            <th class="min-w-150px">Salary</th>
            <th class="min-w-150px">Extn.</th>
            <th class="min-w-150px">E-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger</td>
            <td>Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>5421</td>
            <td>t.nixon@datatables.net</td>
        </tr>
        <tr>
            <td>Garrett</td>
            <td>Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
        </tr>
    </tbody>
</table>

      
@endsection

</script>
