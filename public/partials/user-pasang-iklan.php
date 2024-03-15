<?php


$action     = isset($_GET['action'])?$_GET['action']:'';
$idpost     = isset($_GET['id'])?$_GET['id']:'';        

// echo '<div class="text-right mb-3">';
//     echo '<a href="?hal=pasang-iklan&action=add#formPost" class="btn btn-sm btn-info"> <i class="fa fa-plus-circle"></i> Tambah Produk</a>';
// echo '</div>';

    $action     = $action=='edit'?'edit':'add';
    $args       = [
        'post_type' => 'iklan',
    ];
    $metakey    = [            
        'post_title'    => [
            'type'      => 'text',
            'title'     => 'Judul',
            'desc'      => 'Judul / Nama produk',
            'required'  => true,
        ],
        'post_content'  => [
            'type'      => 'editor',
            'title'     => 'Deskripsi',
            'desc'      => '',
            'required'  => false,
        ],
        'detail'=> [
            'type'      => 'text',
            'title'     => 'Detail',
            'desc'      => 'Detail spesifikasi produk, pisahkan (=) sama dengan. Contoh: Merk=Honda',
            'placeholder'   => 'Kondisi=Baru',
            'required'  => false,
            'clone'     => true,
        ],
        '_thumbnail_id'=> [
            'type'      => 'featured',
            'title'     => 'Gambar',
            'desc'      => 'Foto Utama',
            'required'  => true,
        ],
        'gallery'=> [
            'type'      => 'gallery',
            'title'     => 'Gallery',
            'desc'      => 'Foto-foto produk lainnya',
            'required'  => false,
        ],
        'harga'          => [
            'type'      => 'number',
            'title'     => 'Harga',
            'desc'      => 'Isikan angka saja tanpa karakter khusus',
            'required'  => true,
        ],
        'kategori' => [
            'type'      => 'taxonomy',
            'title'     => 'Kategori',
            'desc'      => '',
            'required'  => false,
        ],
        'lokasi'        => [
            'type'      => 'taxonomy',
            'title'     => 'Lokasi Produk',
            'desc'      => '',
            'required'  => false,
        ],
        'alamat' => [
            'type'      => 'textarea',
            'title'     => 'Alamat Lengkap',
            'required'  => false,
            // 'desc'      => 'Jika kosong, maka akan menggunakan alamat author',
        ],
    ];

    if($action=='edit' && $idpost){
        $args['ID'] = $idpost;
    }

    $form = New Frontpost();

    $titlecard = $action=='add'?'<i class="fa fa-plus-circle me-1"></i> Pasang Iklan':' <i class="fa fa-pencil me-1"></i> Edit Iklan';
    echo '<div class="card shadow mx-auto my-3">';
        echo '<div class="card-header">';
            echo '<span class="font-weight-bold fs-5">'.$titlecard.'</span>';
        echo '</div>';
        echo '<div class="card-body p-md-4">';
            echo $form->formPost($args,$action,$metakey);
        echo '</div>';
    echo '</div>';
