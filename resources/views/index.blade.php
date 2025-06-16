<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="text" id="cardInput" placeholder="Scan Card..." autofocus />

<table id="cardTable">
    <thead>
        <tr><th>ID Number</th><th>Name</th><th>Date of Birth</th></tr>
    </thead>
    <tbody></tbody>
</table>


<script>
document.getElementById('cardInput').addEventListener('change', function () {
    let data = this.value.trim();

    // Example: adjust based on actual card format
    let id = data.slice(0, 11);  // DZ123456789
    let name = data.slice(11, 35).trim(); // From char 11 to 34
    let dob = data.slice(35, 43); // 19900101

    fetch('/insert-card-data', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ id, name, dob })
    }).then(res => res.json())
      .then(data => {
          if (data.success) {
              let row = `<tr><td>${id}</td><td>${name}</td><td>${dob}</td></tr>`;
              document.querySelector('#cardTable tbody').innerHTML += row;
              document.getElementById('cardInput').value = '';
          }
      });
});
</script>
