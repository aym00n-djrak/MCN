import Link from 'next/link'
import styles from '../styles/Home.module.css'


function Navbar(){
    return(
        <nav className={styles.navbar}>
            <Link href="/">
                <a>Menu</a>
            </Link>
            <Link href="/about">
                <a>About</a>
            </Link>
        </nav>
    )
}

export default Navbar;