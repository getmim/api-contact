# api-contact

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install api-contact
```

## Endpoints

### `POST APIHOST/contact`

Menambahkan pesan kontak ke admin. Endpoint ini mengharapkan konten body dalam format json berbentuk seperti di bawah:

```json
{
    "fullname": "User Fullname",
    "email": "user@mail.address",
    "subject": "Message Subject",
    "content": "..."
}
```