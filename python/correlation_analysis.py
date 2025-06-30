import pandas as pd
import json

# Load dataset
df = pd.read_csv("patents.csv")

# Parse dates and create year + abstract length
df['publication_date'] = pd.to_datetime(df['publication_date'], errors='coerce')
df['year'] = df['publication_date'].dt.year
df['abstract_length'] = df['abstract'].astype(str).apply(len)

# Drop rows with NaNs in those columns
df = df.dropna(subset=['year', 'abstract_length'])

# Compute correlation
correlation = df['year'].corr(df['abstract_length'])

# Output as JSON
print(json.dumps({'correlation_year_abstract_length': correlation}))
