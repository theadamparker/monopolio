<?php

return function () {

};

function sizes($size) {
  if ($size == 'featuredImage') {
    echo '@media (max-width: 600px) 600px,
    @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 1200px,
    @media (min-width: 600px) and (max-width: 768px) 400px,
    @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 1500px,
    @media (min-width: 768px) 800px';
  }
  elseif ($size == 'galleryImage') {
    echo '@media (max-width: 600px) 300px,
    @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 600px,
    @media (min-width: 600px) and (max-width: 768px) 300px,
    @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 400px,
    @media (min-width: 768px) 400px';
  }
  elseif ($size == 'productImage') {
    echo '@media (max-width: 600px) 300px,
    @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 500px,
    @media (min-width: 600px) and (max-width: 768px) 300px,
    @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 500px,
    @media (min-width: 768px) 400px';
  }
  else {
    echo '@media (max-width: 600px) 600px,
    @media (max-width: 600px) and (-webkit-min-device-pixel-ratio: 2) 1200px,
    @media (min-width: 600px) and (max-width: 768px) 768px,
    @media (min-width: 600px) and (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) 1500px,
    @media (min-width: 768px) 1500px';
  }
}
