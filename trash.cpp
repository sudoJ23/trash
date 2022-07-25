void apalahini(list_pembeli &s, list_barang &c, list_terbanyak &t) {
	t.first = NULL;
	t.last = NULL;
	struct temp {
		string nama_barang;
		int jumlah;
	};

	struct temp tm[10];

    adr_barang p = c.first_barang;
    int jumlah = 0;
    int index = 0;
    while (p != NULL) {
        jumlah = hitungJumlah(s, c, p->info_barang.nama_barang);
        cout << endl << p->info_barang.nama_barang << " [" << jumlah << "]" << endl;
        tm[index].nama_barang = p->info_barang.nama_barang;
        tm[index].jumlah = jumlah;
        index++;
        p = p->next_barang;
    }

    string tnama;
    int tjumlah;
    for (int i = 0; i < index; i++) {
    	for (int j = i + 1; j < index; j++) {
    		if (tm[i].jumlah < tm[j].jumlah) {
    			tnama = tm[i].nama_barang;
    			tjumlah = tm[i].jumlah;

    			tm[i].nama_barang = tm[j].nama_barang;
    			tm[i].jumlah = tm[j].jumlah;

    			tm[j].nama_barang = tnama;
    			tm[j].jumlah = tjumlah;
    		}
    	}
    }

    if (index >= 3) {
        index = 3;
    }
    for (int i = 0; i < index; i++) {
        insertLast(t, createElmTerbanyak(tm[i].nama_barang, tm[i].jumlah));
    	cout << endl << tm[i].nama_barang << endl;
    	cout << tm[i].jumlah << endl;
    }

    adr_terbanyak q = t.first;
    while (q != NULL) {
        cout << endl << q->info.nama_barang << " [" << q->info.jumlah << "]";
        q = q->next;
    }
}



void maxmin(list_pembeli &s, list_barang &c, list_terbanyak &t) {
    adr_barang p = c.first_barang;
    int maks = 0;
    int dua = 0;
    int tiga = 0;
    int jumlah = 0;
    while (p != NULL) {
        jumlah = hitungJumlah(s, c, p->info_barang.nama_barang);

        if (maks< jumlah) {
        	maks = jumlah;
        }

        // cout << endl << "ID barang : " << p->info_barang.id_barang;
        // cout << endl << "Nama barang : " << p->info_barang.nama_barang;
        // cout << endl << "Jumlah barang : " << jumlah << endl;
        p = p->next_barang;
    }

    p = c.first_barang;
    while (p != NULL) {
        jumlah = hitungJumlah(s, c, p->info_barang.nama_barang);

        if (dua < jumlah) {
        	dua = jumlah;
        }

        // cout << endl << "ID barang : " << p->info_barang.id_barang;
        // cout << endl << "Nama barang : " << p->info_barang.nama_barang;
        // cout << endl << "Jumlah barang : " << jumlah << endl;
        p = p->next_barang;
    }

    cout << endl << "MAX : " << maks << endl;
    cout << "MID : " << dua << endl;
    cout << "MIN : " << tiga << endl << endl;
}
