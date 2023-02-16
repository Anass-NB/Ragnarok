<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Students 2022-2023</title>
  <style>
    #students {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #students td,
    #students th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #students tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #students tr:hover {
      background-color: #ddd;
    }

    #students th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }
  </style>
</head>

<body>
  <h1>All students ESTFBS</h1>

  <table id="students">
    <thead>
      <tr>
        <th>Full name</th>
        <th>Grade</th>
        <th>Status</th>
        <th>Notes</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($students as $student)
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <h6>{{ $student->full_name }}</h6>
            </div>
          </td>
          <td>
            <p>{{ $student->grade }}</p>
          </td>
          <td class="align-middle text-center text-sm">
            <p>Failed</p>
          </td>
          <td>
            <p>{{ $student->note }}</p>
          </td>
        </tr>
      @endforeach


    </tbody>
  </table>

</body>

</html>
