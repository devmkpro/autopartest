// Mock data for parts
const parts = [
  {
    id: 1,
    name: "Brake Pad",
    description: "High-performance brake pads for optimal stopping power",
    price: 49.99,
    stock: 100,
    image: "https://placehold.co/300x200?text=Brake+Pad",
    type: "Brakes",
  },
  {
    id: 2,
    name: "Oil Filter",
    description: "Premium oil filter for engine protection",
    price: 12.99,
    stock: 200,
    image: "https://placehold.co/300x200?text=Oil+Filter",
    type: "Filters",
  },
  {
    id: 3,
    name: "Spark Plug",
    description: "Iridium spark plug for improved fuel efficiency",
    price: 7.99,
    stock: 150,
    image: "https://placehold.co/300x200?text=Spark+Plug",
    type: "Ignition",
  },
  {
    id: 4,
    name: "Air Filter",
    description: "High-flow air filter for better engine performance",
    price: 24.99,
    stock: 75,
    image: "https://placehold.co/300x200?text=Air+Filter",
    type: "Filters",
  },
  {
    id: 5,
    name: "Brake Rotor",
    description: "Durable brake rotor for consistent braking performance",
    price: 89.99,
    stock: 50,
    image: "https://placehold.co/300x200?text=Brake+Rotor",
    type: "Brakes",
  },
  // Add more parts here to test pagination
]

// DOM elements
const partsList = document.getElementById("parts-list")
const searchInput = document.getElementById("search")
const typeFilter = document.getElementById("type-filter")
const priceFilter = document.getElementById("price-filter")
const stockFilter = document.getElementById("stock-filter")
const prevPageBtn = document.getElementById("prev-page")
const nextPageBtn = document.getElementById("next-page")
const pageInfo = document.getElementById("page-info")

// Pagination variables
let currentPage = 1
const itemsPerPage = 6


// Function to filter and paginate parts
function filterAndPaginateParts() {
  const searchTerm = searchInput.value.toLowerCase()
  const selectedType = typeFilter.value
  const selectedPrice = priceFilter.value
  const selectedStock = stockFilter.value

  const filteredParts = parts.filter((part) => {
    const matchesSearch =
      part.name.toLowerCase().includes(searchTerm) || part.description.toLowerCase().includes(searchTerm)
    const matchesType = selectedType === "" || part.type === selectedType
    const matchesPrice =
      selectedPrice === "" ||
      (selectedPrice === "low" && part.price < 20) ||
      (selectedPrice === "medium" && part.price >= 20 && part.price < 50) ||
      (selectedPrice === "high" && part.price >= 50)
    const matchesStock =
      selectedStock === "" ||
      (selectedStock === "inStock" && part.stock > 0) ||
      (selectedStock === "outOfStock" && part.stock === 0)

    return matchesSearch && matchesType && matchesPrice && matchesStock
  })

  const totalPages = Math.ceil(filteredParts.length / itemsPerPage)
  currentPage = Math.min(currentPage, totalPages)

  const startIndex = (currentPage - 1) * itemsPerPage
  const endIndex = startIndex + itemsPerPage

  updatePaginationControls(filteredParts.length)
}

// Function to update pagination controls
function updatePaginationControls(totalItems) {
  const totalPages = Math.ceil(totalItems / itemsPerPage)
  pageInfo.textContent = `Page ${currentPage} of ${totalPages}`
  prevPageBtn.disabled = currentPage === 1
  nextPageBtn.disabled = currentPage === totalPages
}

// Event listeners
searchInput.addEventListener("input", () => {
  currentPage = 1
  filterAndPaginateParts()
})
typeFilter.addEventListener("change", () => {
  currentPage = 1
  filterAndPaginateParts()
})
priceFilter.addEventListener("change", () => {
  currentPage = 1
  filterAndPaginateParts()
})
stockFilter.addEventListener("change", () => {
  currentPage = 1
  filterAndPaginateParts()
})

prevPageBtn.addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--
    filterAndPaginateParts()
  }
})

nextPageBtn.addEventListener("click", () => {
  currentPage++
  filterAndPaginateParts()
})

// Initial render
filterAndPaginateParts()

