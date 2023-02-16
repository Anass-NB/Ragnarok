<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Full name</th>
      <th>Grade</th>
      <th>Status</th>
      <th>Notes</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
          <h6>{{ $student->full_name }}</h6>
        </td>
        <td>
          <p>{{ $student->grade }}</p>
        </td>
        <td>
          <p>S4 GI</p>
        </td>
        <td>
          <p>{{ $student->note }}</p>
        </td>
      </tr>
    @endforeach


  </tbody>
</table>
