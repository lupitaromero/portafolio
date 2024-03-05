import React from 'react';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import '/src/carrousel.css';

const Carrousel_Universidades = () => {
    const settings = {
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4, // Avanza de 3 en 3
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    };
    
    return (
        <div className="max-w-screen-full mx-auto bg-gradient-to-b from-gray-300 to-davi-Red-200 p-8 rounded-t-lg shadow-lg">
            <h2 className="text-3xl font-bold mb-4 text-center text-gray-800">Universidades Afiliadas</h2>
            <Slider {...settings}>
                <div className="slide-item flex justify-center">
                    <div className="logo-container">
                        <img src="/img/universidades/uni_matias.png" alt="Universidad Logo" className="h-16" />
                    </div>
                </div>
                <div className="slide-item flex justify-center">
                    <div className="logo-container">
                        <img src="/img/universidades/uni_matias.png" alt="Universidad Logo" className="h-16" />
                    </div>
                </div>
                <div className="slide-item flex justify-center">
                    <div className="logo-container">
                        <img src="/img/universidades/uni_matias.png" alt="Universidad Logo" className="h-16" />
                    </div>
                </div>
                <div className="slide-item flex justify-center">
                    <div className="logo-container">
                        <img src="/img/universidades/uni_matias.png" alt="Universidad Logo" className="h-16" />
                    </div>
                </div>
                <div className="slide-item flex justify-center">
                    <div className="logo-container">
                        <img src="/img/universidades/uni_matias.png" alt="Universidad Logo" className="h-10" />
                    </div>
                </div>
                {}
            </Slider>
        </div>
    );
};

export default Carrousel_Universidades;
