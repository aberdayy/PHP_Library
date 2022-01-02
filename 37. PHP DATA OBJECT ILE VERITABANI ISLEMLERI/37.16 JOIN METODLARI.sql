SELECT
    u.id,
    u.adisoyadi,
    u.emailadresi,
    u.sifre,
    u.telefon,
    u.yas,
    u.cinsiyet,
    u.kayittarihi,
    i.id,
    i.uyeid,
    i.siteyegirissayisi,
    i.siparissayisi,
    s.id,
    s.uyeid,
    s.urunadi,
    s.urunfiyati
FROM
    RDYmedia.uyeler u
INNER JOIN RDYmedia.istatistikler i ON
    u.id = i.uyeid
INNER JOIN RDYmedia.siparisler s ON
    u.id = s.uyeid;
