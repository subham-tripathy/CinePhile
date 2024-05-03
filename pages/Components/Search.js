import React from 'react'

const Search = () => {
    return (
        <>
            <form className='w-[40%]' action="search">
                <input className='w-[100%] p-2 pl-4 rounded shadow shadow-black' type="search" placeholder='Search for Movies/Web Series' name='query' autoComplete='off'/>
            </form>
        </>
    )
}

export default Search