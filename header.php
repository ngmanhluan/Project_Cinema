<?php
require_once 'database.php';		
$sql = "SELECT * FROM thu2";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <div class="header">
        <nav id="navbar">
            <img src="./footer.img/logo (1).png" class="logo">
            <ul id="menu">
                <li>Trang chủ</li>
                <li>Phim</li>
                <li>Lịch Chiếu</li>
                <li>Ưu Đãi</li>
                <li>Tin Tức</li>
                <li>Giới thiệu</li>
                <li>Liên Hệ</li>
                <li>Thành Viên</li>
                <li>
                    <a href="login.php">
                        Tài Khoản
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <p>
        Tô Hoài là nhà văn tài năng, cần mẫn, ông sáng tác trên nhiều thể loại. 
        Ở thể loại nào ông đạt được những thành tựu xuất sắc. Ông là nhà văn của sự thật đời thường,
        ông có vốn hiểu biết phong phú, sâu sắc về phong tục tập quán của nhiều vùng khác nhau. Trước
        cách mạng ông chủ yếu hướng ngòi bút của mình về nông thôn nghèo và thế giới loài vật, sau cách 
        mạng ông hướng đễn những vùng nông thôn rộng lớn, đặc biệt là Tây Bắc. Vợ chồng A Phủ là kết quả
        của chuyến đi thực tế Tây Bắc của ông.

        Nhân vật trung tâm trong tác phẩm là Mị, cô gái trẻ trung, xinh đẹp nhưng số phận lại vô cùng bất hạnh.
        Vẻ đẹp của Mị được minh chứng qua việc “trai đến đứng nhẵn chân vách đầu buồng Mị” Mị mang nhan sắc rực rỡ của người con gái tuổi mới lớn, độ tuổi đẹp đẽ, căng tràn sức sống nhất. Không chỉ xinh đẹp, mà Mị còn rất tài năng, tài thổi sáo của Mị nức tiếng gần xa, biết bao người mê đắm, ngày đêm thổi sáo đi theo Mị. Dù gia cảnh nghèo nàn, vẫn luôn nợ tiền nhà thống lí Pá Tra, nhưng khi biết nhà thống lí muốn bắt mình về làm con dâu để gạt nợ, cô đã lập tức cầu xin cha cho mình được đi làm để trả nợ dần: “Con sẽ làm nương ngô giả nợ thay cho bố”, vì cô tự tin vào khả năng, sức khỏe của mình: “Con nay đã biết cuốc nương làm ngô” và hơn hết cô gái trẻ ấy con mang trong mình cái khát vọng được sống cuộc đời tự do: “Bố đừng bán con cho nhà giàu”. Dù Mị hội tụ đầy đủ những phẩm chất để được hưởng một cuộc sống tự do, hạnh phúc nhưng số phận lại vô cùng bất hạnh, bị các thế lực, thần quyền và cường quyền chà đạp, áp bức.


        Vì món nợ truyền kiếp, cuối cùng Mị bị A Sử con trai thống lí Pá Tra bắt về làm con dâu gạt nợ.
        Cũng chính từ giờ phút đó cuộc sống bi kịch đổ ập xuống đời cô. Ban đầu khi mới về nhà thống lí, 
        trong Mị vẫn mong manh xuất hiện ý thức phản kháng: đêm nào cô cũng khóc, và đến cuối cùng cô đã 
        đi đến quyết định ăn lá ngón tự tử. Người ta chỉ muốn chết khi ý thức được nỗi khổ của mình, khi 
        sự chịu đựng đã đạt đến giới hạn. Nhưng tình yêu thương gia đình đã khiến Mị từ bỏ ý định đó, vì 
        nếu cô chết đi, món nợ vẫn còn, cha cô lại phải gánh chịu. Mị chấp nhận quay trở lại với cuộc sống 
        lầm lũi, bất hạnh.

        Khi người ta sống trong đau đớn và khổ cực trong một thời gian quá dài, tự nhiên sẽ mất đi cảm 
        giác về cái khổ, cái bất công. Khi Mị làm dâu đã quen, cô quên đi nỗi đau khổ về thể xác. Thời 
        gian của Mị không tính bằng thời gian đơn thuần mà bằng lượng công việc cô làm, việc này nối tiếp 
        việc kia, dường như không có lúc nào người con gái ấy được nghỉ ngơi. Từ một người con gái trẻ trung, 
        đầy sức sống, Mị biến thành công cụ lao động, mất đi ý niềm về thời gian, về tuổi trẻ. Không chỉ vậy Mị 
        còn phải gánh chịu nỗi đau khổ về tinh thần: “Ai có việc ở xa về, có việc vào nhà thống Lí Pá Tra 
        thường trông thấy có một cô con gái ngồi quay sợi gai bên tảng đá trước cửa, cạnh tàu ngựa”, 
        “lúc nào cũng cúi mặt, mặt buồn rười rượi”. Và chính Mị cũng tưởng mình cũng là con trâu, 
        mình cũng là con ngựa trong nhà này. Bằng biện pháp so sánh, đã cho thấy nỗi khổ bị đẩy lên 
        đến tận cùng của Mị. Đặc biệt là hình ảnh ẩn dụ về căn buồng mà Mị ở : “kín mít, chỉ có một 
        cửa sổ lỗ vuông bằng bàn tay, lúc nào nhìn ra cũng chỉ thấy mờ mờ trăng trắng không biết là 
        sương hay là nắng”. Đây thực chất không phải là nơi để con người sinh sống mà nó như một địa 
        ngục trần gian, dùng để giam hãm cuộc đời Mị. Và nó cũng chẳng khác gì một nấm mồ chôn vùi 
        thanh xuân, tuổi trẻ và hạnh phúc của một người con gái lương thiện, giàu sức sống. Đoạn văn 
        cho thấy hiện thực xã hội thối nát đương thời, đã chà đạp lên quyền sống và hạnh phúc của con 
        người. Đồng thời cũng là lời nói cảm thương cho những số phận bất hạnh dưới ách thống trị 
        của bọn phong kiến miền núi.

        Nhưng ẩn sâu trong tâm hồn tưởng chừng như đã héo úa, không còn niềm tin ấy nữa lại là sức 
        sống tiềm tàng vô cùng mãnh liệt. Sức sống ấy được thể hiện rõ nhất trong đêm tình mùa xuân. 
        Không phải ngẫu nhiên mà sức sống đó được khơi nguồn, trước hết do Mị nhận sự tác động từ 
        không khí mùa xuân ấm áp, đầy tình tứ, những đồi cỏ gianh vàng ửng, những chiếc váy phơi 
        trên mỏm đá xòe rộng ra như những cánh bướm sặc sỡ. Cùng với đó là âm thanh náo nhiệt, rộn 
        rã của đám trẻ con và đặc biệt là sự xuất hiện của tiếng sáo. Tiếng sáo xuất hiện từ xa đến gần, 
         đầu là ở bên ngoài, sau đó gần như hòa làm một trong Mị: “Rập rờn trong đầu Mị”. Trong hồn Mị 
         sống lại những khát khao được yêu đương, khát vọng được sống hạnh phúc của ngày xưa, từ cõi vô cảm, quên lãng, Mị trở về cõi nhớ. Đồng thời cũng không thể thiếu đi chất xúc tác của hơi men, Mị uống cả hũ rượu, uống ừng ực từng bát, Mị say rồi ngồi lịm đi, mơ màng nhớ về quá khứ tự do.

        Những chất xúc tác đó đã tạo nên hành trình vượt thoát, để Mị tìm lại chính bản thân mình. Trong lòng Mị thấy phơi phới trở lại, cái cảm giác mà tưởng rằng bấy lâu nay đã mất. Mị ý thức được rằng: “Mị trẻ lắm. Mị vẫn còn trẻ. Mị muốn đi chơi”. Nhưng sự thật phũ phàng, Mị muốn đi chơi nhưng lại không được đi, nên Mị quay về buồng. Trong hơi men của rượu lại một lần nữa sức sống trỗi dậy. Mị lấy ống mỡ, sắn một miếng thắp lên cho sáng, đây không chỉ là hành động thắp sáng vật lí đơn thuần mà nó còn biểu tượng cho khát vọng, niềm tin được giải thoát, thắp sáng chính cuộc đời Mị. Cô quấn lại tóc, lấy cái váy chuẩn bị đi chơi thì bị A Sử chặn đứng lại bằng hành động vô cùng thô bạo. Mị bị trói đứng ở cột, nhưng A Sử chỉ trói được thân xác Mị, chứ không thể trói được khát vọng, sức sống trong Mị. Trong tâm tưởng cô vẫn thả hồn theo tiếng sáo và những cuộc chơi. Sáng hôm sau Mị tỉnh lại và tiếp diễn chuỗi ngày sống mòn, sống mỏi.


    </p>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu"); 

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }
    </script>
    
</body>
</html>