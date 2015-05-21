from django.shortcuts import render

def koreahouse_home_page(request):
    return render(request, 'koreahouse/koreahouse_home.html')

def koreahouse_info_page(request):
    return render(request, 'koreahouse/koreahouse_info.html')

def koreahouse_menu_page(request):
    return render(request, 'koreahouse/koreahouse_menu.html')