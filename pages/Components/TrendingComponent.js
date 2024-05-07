import Link from 'next/link'
import React from 'react'

const TrendingComponent = () => {
  return (
    <div className='my-12'>
      <h1 className='mx-10 w-max mb-5 text-2xl text-white bg-[gold] px-3 py-1 rounded text-shadow shadow shadow-black'>TRENDING MOVIES</h1>
      <div className='relative grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-12 px-8 w-max'>
        <Link href={'/trending'} className='absolute top-0 -right-16 bg-[silver] hover:bg-[gold] px-2 py-1 rounded shadows shadow-black'>View All</Link>
        <Link href={'/movie?id=123'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
          <img src={'/pics/posters/ironman3.jpg'} className='h-72 border-2 border-white rounded-lg shadow shadow-black' />
          <span className='flex justify-between p-2'>
            <p className="name">Iron Man 3</p>
            <p className="rating">5<span className='text-shadow'>⭐</span> </p>
          </span>
        </Link>
        <Link href={'/movie?id=123'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
          <img src={'/pics/posters/ironman3.jpg'} className='h-72 border-2 border-white rounded-lg shadow shadow-black' />
          <span className='flex justify-between p-2'>
            <p className="name">Iron Man 3</p>
            <p className="rating">5<span className='text-shadow'>⭐</span> </p>
          </span>
        </Link>
        <Link href={'/movie?id=123'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
          <img src={'/pics/posters/ironman3.jpg'} className='h-72 border-2 border-white rounded-lg shadow shadow-black' />
          <span className='flex justify-between p-2'>
            <p className="name">Iron Man 3</p>
            <p className="rating">5<span className='text-shadow'>⭐</span> </p>
          </span>
        </Link>
        <Link href={'/movie?id=123'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
          <img src={'/pics/posters/ironman3.jpg'} className='h-72 border-2 border-white rounded-lg shadow shadow-black' />
          <span className='flex justify-between p-2'>
            <p className="name">Iron Man 3</p>
            <p className="rating">5<span className='text-shadow'>⭐</span> </p>
          </span>
        </Link>
      </div>
    </div>
  )
}

export default TrendingComponent