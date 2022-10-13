import Link from 'next/link'
import styles from '../styles/Home.module.css'


function Navbar(){
    return(
        <nav className={styles.navbar}>

            <li className={styles.navbaritem}>
                <Link href="/">
                <a>Home</a>
            </Link>
            </li>

            <li className={styles.navbaritem}>
            <Link className={styles.navbaritem} href="/">
                <a>Commandes</a>
            </Link>
            </li>
            
            <li className={styles.navbaritem}>
            <Link className={styles.navbaritem} href="/">
                <a>Configuration</a>
            </Link>
            </li>
            
            <li className={styles.navbaritem}>
            <Link className={styles.navbaritem} href="/about">
                <a>About</a>
            </Link>
            </li>
        </nav>
    )
}

export default Navbar;