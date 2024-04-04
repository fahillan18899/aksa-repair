SELECT SUM(jumlah_masuk - jumlah_keluar) FROM stock_opnames WHERE id = 1;

SELECT stock_opnames.id AS id, stock_opnames.nama AS nama, stock_opnames.jumlah_masuk AS jumlah_masuk, stock_opnames.lokasi_pemakaian AS lokasi_pemakaian, stock_opnames.jumlah_keluar AS jumlah_keluar, history_stock_opnames.total_sparepart AS total, stock_opnames.tanggal_masuk AS tanggal_masuk, stock_opnames.tanggal_keluar AS tanggal_keluar FROM history_stock_opnames RIGHT JOIN stock_opnames ON history_stock_opnames.sparepart_id = stock_opnames.id;

SELECT id, nama, type FROM stock_opnames;

DESCRIBE stock_opnames;

SELECT history_stock_opnames.total_sparepart AS selisih_jumlah_masuk_keluar_terakhir FROM history_stock_opnames JOIN stock_opnames ON history_stock_opnames.sparepart_id = stock_opnames.id WHERE stock_opnames.id = 34 ORDER BY history_stock_opnames.created_at DESC;

