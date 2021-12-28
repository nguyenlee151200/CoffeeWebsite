var sessionWetMenuArea, listMenu, productItem;
$(function(){
    sessionWetMenuArea = $(".wet_menu_area");
    listMenu = $("#list-menu-temp");
    productItem = $("#product-item-temp");

    viewListMenu();
})

function viewListMenu(){
    //Lấy dữ liệu từ api
    let url = "product-service/api/v1/public/product-types/company/2?view=true";//url tương ứng để lấy ra các product
    
    ajaxGet(url).then(rs =>{

        let view = rs.map((data, index) =>{
            
            let listProductClone = listMenu.clone();

            listProductClone.attr("data-id",data.id);

            listProductClone.removeAttr("id");

            listProductClone.find(".name-category").html(viewFields(data.name));

            listProductClone.find
        })
        console.log(rs);
    }).catch(err => {
        console.log(err);
        alertDanger("Tìm kiếm product type lỗi !");
    });
}