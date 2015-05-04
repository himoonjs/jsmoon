from django.shortcuts import render

def parallax_home_page(request):
    return render(request, 'parallax/parallax_home.html')