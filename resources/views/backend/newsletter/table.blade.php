<table class="table table-bordered">
    <thead>
        <tr>
            <td width="80">Action</td>
            <td>Subsriber Email</td>
            <td width="120">User Id</td>
            <td>Status</td>

        </tr>
    </thead>
    <tbody>
        @foreach($subscribers as $subscriber)

            <tr>
                <td>
                  <a href="{{ url('admin/delete-newsletter-subscriber/'.$subscriber->id.'')  }}">Delete</a>
                </td>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->id }}</td>
                <td>
                  @if($subscriber->status == 1 )
                    <a href="{{ url('admin/update-newsletter-status/'.$subscriber->id. '/0') }}">
                  <span style="color:green;">Active</span></a>
                  @else
                  <a href="{{ url('admin/update-newsletter-status/'.$subscriber->id. '/1') }}">
                  <span style="color:red;">Inactive</span></a>
                  @endif
                </td>

            </tr>

        @endforeach
      </tbody>
  </table>
