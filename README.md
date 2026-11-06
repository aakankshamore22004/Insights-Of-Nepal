# Insights of Nepal — GitHub Pages Edition

This project has been converted from PHP-named pages to a static HTML, CSS and JavaScript website.

## Run locally
Open `index.html` in a browser, or use VS Code Live Server for a local development server.

## Publish with GitHub Pages
1. Push the contents of this folder to the repository's `main` branch.
2. In GitHub, open **Settings → Pages**.
3. Under **Build and deployment**, choose **Deploy from a branch**.
4. Select branch **main** and folder **/(root)**, then save.
5. Wait for the deployment URL shown in the Pages settings.

## Important: static hosting limitations
GitHub Pages does not execute PHP and does not provide a database or server-side form processing. Booking forms in this version perform browser-side validation only; they do not transmit or save reservations. The contact and tour-plan forms use the visitor's email application through `mailto:`. For real online submissions, connect a form backend/service or build a separate server/API.

The old PHP processing scripts have been removed because they cannot run on GitHub Pages. The unused local login link and placeholder Tawk.to widget have also been removed.
