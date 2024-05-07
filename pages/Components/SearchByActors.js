import Link from 'next/link'
import React from 'react'

const SearchByActors = () => {
    return (
        <div className='relative my-12'>
            <h1 className='mx-10 w-max mb-5 text-2xl text-white bg-[gold] px-3 py-1 rounded text-shadow shadow shadow-black'>POPULAR ACTORS</h1>
            <div className='relative grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-12 px-8 w-max'>
                <Link href={'/popular'} className='absolute top-0 -right-16 bg-[silver] hover:bg-[gold] px-2 py-1 rounded shadows shadow-black'>View All</Link>

                <Link href={'/actor?id=123'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
                    <img src={'/pics/actors/rdj.jpg'} className='h-52 w-52 rounded-full border-2 border-white shadow shadow-black' />
                    <p className="name py-3">Robert Downey Jr.</p>
                </Link>

                <Link href={'/actor?id=321'} className='bg-[silver] px-5 pt-3 rounded-lg md:hover:bg-[gold] md:hover:shadow-md hover:shadow-black'>
                    <img src={'/pics/actors/srk.webp'} className='h-52 w-52 rounded-full border-2 border-white shadow shadow-black' />
                    <p className="name py-3">Shah Rukh Khan</p>
                </Link>
            </div>
        </div>
    )
}

export default SearchByActors