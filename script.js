
const endpoint = 'http://wisnuDandyJarkom/api/buku';



// Function to fetch data from API
const fetchData = async () => {
    try {
        const response = await fetch(endpoint);
        console.log("Fetching data from API...");
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status} - ${response.statusText}`);
        }

        const result = await response.json();
        console.log("API response:", result);

        // Ambil data dari properti result.data
        const data = Array.isArray(result.data) ? result.data : [];
        console.log("Parsed data:", data);

        // Render data ke dalam tabel
        renderData(data);
    } catch (error) {
        console.error("Fetch error:", error);
    }
};


// Function to render data into the table
const renderData = (data) => {
    const dataList = document.getElementById("dataList");
    if (!dataList) {
        console.error("Element with ID 'dataList' not found!");
        return;
    }

    // Bersihkan tabel sebelum menambahkan data baru
    dataList.innerHTML = "";

    // Periksa jika data kosong
    if (!Array.isArray(data) || data.length === 0) {
        dataList.innerHTML = "<tr><td colspan='7' style='text-align: center;'>Tidak ada data yang tersedia</td></tr>";
        return;
    }

    // Iterasi melalui data dan tambahkan ke tabel
    data.forEach((item, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${item.judul || "N/A"}</td>
            <td>${item.pengarang || "N/A"}</td>
            <td>${item.kategori || "N/A"}</td>
            <td>${item.deskripsi || "N/A"}</td>
            <td>${item.bahasa || "N/A"}</td>
            <td>${item.penerbit || "N/A"}</td>
            <td>${item.tanggal_publikasi || "N/A"}</td>
            <td>
                <button onclick="deleteTask(${item.id})" class="btn btn-success">Hapus</button>
            </td>
        `;
        dataList.appendChild(row);
    });
};

// Function to handle delete
const deleteTask = async (id) => {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        try {
            const response = await fetch(`${endpoint}/${id}`, {
                method: "DELETE",
            });
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status} - ${response.statusText}`);
            }
            console.log(`Deleted task: ${id}`);
            fetchData(); // Refresh data after deletion
        } catch (error) {
            console.error("Error deleting task:", error);
        }
    }
};

// Handle form submission
document.getElementById("dataForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const id = document.getElementById("id")?.value || null;
    const method = id ? "PUT" : "POST"; // Use PUT for update
    const url = id ? `${endpoint}/${id}` : endpoint;

    const formData = new FormData(e.target);
    const jsonData = Object.fromEntries(formData.entries());

    try {
        const response = await fetch(url, {
            method,
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(jsonData),
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status} - ${response.statusText}`);
        }

        console.log("Data berhasil disimpan");
        e.target.reset(); // Clear form after successful submission
        fetchData(); // Refresh data after submit
    } catch (error) {
        console.error("Error updating data:", error);
    }
});

// Fetch data on page load
fetchData();



