import React from 'react';
import Link from 'next/link';
import { Swiper, SwiperSlide } from 'swiper/react';

import 'swiper/css';
import 'swiper/css/navigation';

import { Autoplay, Pagination, Navigation } from 'swiper/modules';



const backdrop = '/pics/backdrops/ironman3.png'

const Carousel = () => {
  return (
    <div>

      <div className='hidden md:block'>
        <Swiper
          autoplay={{
            delay: 3000,
          }}
          loop={true}
          pagination={{
            clickable: true,
          }}
          navigation={true}
          modules={[Autoplay, Pagination, Navigation]}
          className="mySwiper hidden md:block h-96">
          <SwiperSlide><Link href={'/movie?id=123'}><img src={backdrop} style={{position:"fixed", top:"-30%"}} /></Link></SwiperSlide>
          <SwiperSlide><Link href={'/movie?id=123'}><img src={backdrop} style={{position:"fixed", top:"-30%"}} /></Link></SwiperSlide>
        </Swiper>
      </div>

    </div >
  );
}

export default Carousel