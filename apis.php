<?php
$json = '';
if($_GET['gtype']=='upload'){
    //echo json_encode($_FILES); die;
    $new_file_name = strtolower($_FILES['product_image']['name']);
    move_uploaded_file($_FILES['product_image']['tmp_name'], 'uploads/'.$new_file_name);
    $message = 'Congratulations!  Your file was accepted.';
    $response = array(
        'name'=>$_POST['product_name'],
        'price'=>$_POST['product_price'],
        'image'=>$new_file_name,
    );
    echo json_encode($response); die;
   // echo '<pre>'; print_r($_FILES); die;
}else if($_GET['gtype']=='Genre'){
    $genres = array(
                array(
                    'id'    =>      '1',
                    'name'  =>      'History'
                ),
                array(
                    'id'    =>      '2',
                    'name'  =>      'Mathematical Calculations'
                ),
                array(
                    'id'    =>      '3',
                    'name'  =>      'Medical Sciences'
                ),
                array(
                    'id'    =>      '4',
                    'name'  =>      'Religion of universe'
                ),
                array(
                    'id'    =>      '5',
                    'name'  =>      'Mechanical Developments'
                ),
                array(
                    'id'    =>      '6',
                    'name'  =>      'Computer Networks & Hardware'
                ),
                array(
                    'id'    =>      '7',
                    'name'  =>      'Computer Applications'
                )
        
    );
    echo $json = json_encode($genres);
    die;
}else if($_GET['gtype']=='Books'){
    $json = '[{
        "id": 1,
        "Category": "1",
        "DateCompleted": "",
        "Description": "massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar",
        "External": false,
        "Title": "nibh ligula nec sem duis aliquam",
        "URL": "./assets/images/b-1.png"
    },
    {
        "id": 2,
        "Category": "1",
        "DateCompleted": "",
        "Description": "duis at velit eu est congue elementum in hac habitasse platea dictumst morbi vestibulum velit id pretium iaculis",
        "External": false,
        "Title": "ultrices mattis odio donec",
        "URL": "./assets/images/b-2.png"
    },
    {
        "id": 3,
        "Category": "2",
        "DateCompleted": "",
        "Description": "faucibus orci luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices",
        "External": false,
        "Title": "suspendisse accumsan tortor quis turpis",
        "URL": "./assets/images/b-3.png"
    },
    {
        "id": 4,
        "Category": "1",
        "DateCompleted": "",
        "Description": "dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue",
        "External": true,
        "Title": "id massa id nisl venenatis lacinia",
        "URL": "./assets/images/b-4.png"
    },
    {
        "id": 5,
        "Category": "3",
        "DateCompleted": "7/16/2016",
        "Description": "vitae quam suspendisse potenti nullam porttitor lacus at turpis donec",
        "External": true,
        "Title": "donec pharetra magna vestibulum aliquet ultrices",
        "URL": "./assets/images/b-5.png"
    },
    {
        "id": 6,
        "Category": "1",
        "DateCompleted": "",
        "Description": "placerat ante nulla justo aliquam quis turpis eget elit sodales scelerisque mauris sit amet",
        "External": false,
        "Title": "varius integer ac",
        "URL": "./assets/images/b-1.png"
    },
    {
        "id": 7,
        "Category": "4",
        "DateCompleted": "",
        "Description": "at feugiat non pretium quis lectus suspendisse potenti in eleifend quam",
        "External": true,
        "Title": "aliquam sit amet diam",
        "URL": "./assets/images/b-2.png"
    },
    {
        "id": 8,
        "Category": "5",
        "DateCompleted": "",
        "Description": "justo eu massa donec dapibus duis at velit eu est congue elementum in hac",
        "External": false,
        "Title": "eros viverra eget congue",
        "URL": "./assets/images/b-3.png"
    },
    {
        "id": 9,
        "Category": "3",
        "DateCompleted": "",
        "Description": "morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede",
        "External": false,
        "Title": "vivamus vel nulla",
        "URL": "./assets/images/b-4.png"
    },
    {
        "id": 10,
        "Category": "5",
        "DateCompleted": "11/29/2016",
        "Description": "quisque erat eros viverra eget congue eget semper rutrum nulla nunc",
        "External": false,
        "Title": "ac est lacinia nisi",
        "URL": "./assets/images/b-5.png"
    },
    {
        "id": 11,
        "Category": "4",
        "DateCompleted": "",
        "Description": "ultrices posuere cubilia curae nulla dapibus dolor vel est donec",
        "External": false,
        "Title": "erat fermentum justo nec",
        "URL": "./assets/images/b-1.png"
    },
    {
        "id": 12,
        "Category": "6",
        "DateCompleted": "",
        "Description": "velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus orci luctus et",
        "External": true,
        "Title": "odio justo sollicitudin",
        "URL": "./assets/images/b-2.png"
    },
    {
        "id": 13,
        "Category": "7",
        "DateCompleted": "5/10/2016",
        "Description": "nec dui luctus rutrum nulla tellus in sagittis dui vel nisl duis ac",
        "External": false,
        "Title": "commodo vulputate justo",
        "URL": "./assets/images/b-3.png"
    },
    {
        "id": 14,
        "Category": "5",
        "DateCompleted": "",
        "Description": "vestibulum ac est lacinia nisi venenatis tristique fusce congue diam id ornare imperdiet sapien urna",
        "External": true,
        "Title": "magna vulputate luctus cum sociis natoque",
        "URL": "./assets/images/b-4.png"
    },
    {
        "id": 15,
        "Category": "7",
        "DateCompleted": "",
        "Description": "interdum mauris ullamcorper purus sit amet nulla quisque arcu libero rutrum ac",
        "External": false,
        "Title": "mus etiam vel augue vestibulum",
        "URL": "./assets/images/b-5.png"
    },
    {
        "id": 16,
        "Category": "4",
        "DateCompleted": "11/28/2016",
        "Description": "eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit",
        "External": true,
        "Title": "pellentesque ultrices phasellus",
        "URL": "./assets/images/b-1.png"
    },
    {
        "id": 17,
        "Category": "3",
        "DateCompleted": "",
        "Description": "sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus",
        "External": true,
        "Title": "integer tincidunt ante vel ipsum praesent",
        "URL": "./assets/images/b-2.png"
    },
    {
        "id": 18,
        "Category": "2",
        "DateCompleted": "",
        "Description": "fermentum donec ut mauris eget massa tempor convallis nulla neque libero convallis eget",
        "External": true,
        "Title": "rutrum ac lobortis",
        "URL": "./assets/images/b-3.png"
    },
    {
        "id": 19,
        "Category": "1",
        "DateCompleted": "",
        "Description": "nam ultrices libero non mattis pulvinar nulla pede ullamcorper augue",
        "External": true,
        "Title": "tortor duis mattis egestas metus",
        "URL": "./assets/images/b-4.png"
    },
    {
        "id": 20,
        "Category": "5",
        "DateCompleted": "",
        "Description": "suspendisse ornare consequat lectus in est risus auctor sed tristique",
        "External": false,
        "Title": "sed nisl nunc rhoncus dui",
        "URL": "./assets/images/b-5.png"
    },
    {
        "id": 21,
        "Category": "1",
        "DateCompleted": "",
        "Description": "massa id nisl venenatis lacinia aenean sit amet justo morbi ut odio",
        "External": true,
        "Title": "vestibulum eget vulputate ut",
        "URL": "./assets/images/b-1.png"
    },
    {
        "id": 22,
        "Category": "5",
        "DateCompleted": "",
        "Description": "ridiculus mus etiam vel augue vestibulum rutrum rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis",
        "External": true,
        "Title": "sed vel enim sit amet",
        "URL": "./assets/images/b-2.png"
    },
    {
        "id": 23,
        "Category": "6",
        "DateCompleted": "",
        "Description": "ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo",
        "External": false,
        "Title": "augue vestibulum rutrum rutrum neque aenean",
        "URL": "./assets/images/b-3.png"
    },
    {
        "id": 24,
        "Category": "7",
        "DateCompleted": "",
        "Description": "odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar lobortis est phasellus sit amet erat nulla tempus",
        "External": false,
        "Title": "vulputate justo in blandit ultrices",
        "URL": "./assets/images/b-4.png"
    },
    {
        "id": 25,
        "Category": "2",
        "DateCompleted": "2/19/2017",
        "Description": "in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis",
        "External": true,
        "Title": "erat fermentum justo nec condimentum",
        "URL": "./assets/images/b-5.png"
    }
]';
echo $json;
}


