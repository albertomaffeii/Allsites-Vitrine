@extends('layouts.site')

@section('title', 'Allsites IT - Vitrine - Contact')

@section('content')
    <div class="gray-background">
        <section class="contact__block contact-wrapper">
            <h1 class="display-medium">Talk to us! </h1>
            <p>We are here to assist you. If you have any questions, inquiries, or feedback about our products or services, please don't hesitate to get in touch with us. We are eager to hear from you and provide any assistance you may need.<br><br>Please fill out the form below with your details and message, and we will get back to you as soon as possible. We value your input and are committed to delivering excellent customer service.</p>
            <section class="contact__options">

                <form class="contact__form" action="{{route('site.contact.store')}}" method="post">
                    @csrf
                    @if(session('success'))
                        <div>
                            {{session('message')}}
                        </div>
                    @endif
                    <div>
                    </div>
                    <label for="name">Name</label>
                    <input id="name" name="name" type="text" tabindex="1" placeholder="Ex: José da Silva"
                           autofocus value="{{old('name')}}">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="text" tabindex="2" placeholder="Ex: email@email.com.br"
                           value="{{old('email')}}">
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror

                    <label for="message">Message</label>
                    <textarea id="message" name="message" tabindex="3" cols="20" rows="4" placeholder="Your message...">{{old('message')}}</textarea>
                    @error('message')
                    <div>{{ $message }}</div>
                    @enderror

                    <button class="button button_primary" type="submit">Send</button>
                </form>

                <div class="contact__infos">
                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/phone-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Phone contact</h3>
                        </div>
                        <a title="clique no número do telefone para ligar" href="tel:16997976915">(16) 99797-6915</a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/mail-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">E-mail contact</h3>
                        </div>
                        <a title="Clique no email para enviar email automatico" href="mailto:admin@allsites.combr ">admin@allsites.com.br </a>
                    </div>

                    <div>
                        <div class="contact__infos__header">
                            <img src="{{asset('images/pin-map-contact-icon.svg')}}" alt="">
                            <h3 class="title-small">Address </h3>
                        </div>
                        <a title="clique no endereço para traçar uma rota" target="_blank"
                           href="https://www.google.com/maps/dir//Rua+Episcopal,+870+-+Centro,+S%C3%A3o+Carlos+-+SP,+13560-570">
                            Rua Episcopal, 870<br>
                            Centro<br>
                            São Carlos/SP<br>
                            CEP: 13560-570
                        </a>
                    </div>
                    <section class="contact__infos__social-media">
                        <a href="https://www.facebook.com/albertomaffeii/" target="_blank">Facebook /</a>
                        <a href="javascript:;"> YouTube</a>
                    </section>
                </div>
            </section>
        </section>
    </div>
@endsection
