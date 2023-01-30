<script type="module">
    function verifyDelete(opid) {
        Swal.fire({
        title: 'Tem certeza?!',
        text: "Essa ação é irreversivel",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, delete'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location = 'deletetrade.php?id='+opid;
        } else {
            return false
        }
        })
    }

    const ctx = document.getElementById('line-chart');
    const labels = Utils.days({count: 31});
    const data = {
        labels,
        datasets: [{
            data: [210, 250, 237, 450, 234, 124, 411,267],
            label: "Progressão de custo",
        }]
    }
    const config = {
        type: 'line',
        data,
        options: {
            responsive: true,
        }
    };

    const myChart = new Chart(ctx,config)
      
</script>