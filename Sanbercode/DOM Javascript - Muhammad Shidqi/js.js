let items = [
        ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'], 
        ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
        ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpg'],
        ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
    ]

    let keranjang = 0;
    let barang = document.getElementById("listBarang");
    let listProduct =(function(filter){
        let product = barang.querySelector('div');
        if (product != null) barang.removeChild(product);

        const row = document.createElement('div');
        row.setAttribute("class", "row");

        filter.forEach(function(item){
            const kotak = document.createElement('div');
            kotak.classList = "col-md-4 my-4";

            row.appendChild(kotak);

            const card = document.createElement('div');
            card.classList = "card";
            card.setAttribute("style", 'width: 18rem;');

            kotak.appendChild(card);

            const gambar = document.createElement('img');
            gambar.classList = "card-img-top";
            gambar.setAttribute("src", 'img/' + item[4]);

            card.appendChild(gambar);

            const cardBody = document.createElement('div');
            cardBody.classList = "card-body";

            card.appendChild(cardBody);

            const h5 = document.createElement('h5');
            h5.classList = "card-title";
            h5.innerText = item[1];

            cardBody.appendChild(h5);

            const desc = document.createElement('p');
            desc.classList = "card-text";
            desc.innerText = item[3];

            cardBody.appendChild(desc);

            const cost = document.createElement('p');
            cost.classList = "card-text";
            cost.innerText = "Rp. " + item[2];

            cardBody.appendChild(cost);

            const a = document.createElement('a');
            a.classList = "btn btn-primary";
            a.setAttribute("href", '#');
            a.setAttribute("id", "addCart");
            a.innerText = "Tambahkan Ke Keranjang";
            a.addEventListener('click', () => {
                keranjang++;
                const hasilKeranjang = document.getElementById('cart');
                hasilKeranjang.innerText = keranjang;
            });

            cardBody.appendChild(a);
        });
        barang.appendChild(row);
    });
    document.getElementById("formItem").onsubmit = (e) => {
        e.preventDefault()

        let keyword = document.getElementById("keyword").value;
        let filter = items.filter((item) => {
            return item[1].toLowerCase().indexOf(keyword.toLowerCase()) != -1
        });
            
        listProduct(filter);
    }

    listProduct(items);