from django.shortcuts import render

def koreahouse_home_page(request):
    return render(request, 'koreahouse/koreahouse_home.html')