#include<iostream>
using namespace std;
class Matrix
{
public:
	int a[100][100], k;
	Matrix(int);
	friend istream& operator>>(istream&, Matrix&);
	friend ostream& operator<<(ostream&, Matrix);
	Matrix operator+(Matrix&);
};
Matrix::Matrix(int x)
{
	k = x;
}
istream& operator>>(istream& input, Matrix& m)
{
	for (int i = 0; i < m.k; i++)
	{
		for (int j = 0; j < m.k; j++)
		{
			input >> m.a[i][j];
		}
	}
	return input;
}
ostream& operator<<(ostream& output, Matrix m)
{
	for (int i = 0; i < m.k; i++)
	{
		for (int j = 0; j < m.k; j++)
		{
			output << m.a[i][j];
			if (j != m.k - 1)output << " ";
		}
		output << endl;
	}
	return output;
}
Matrix Matrix::operator+(Matrix &m)
{
	Matrix ans(k);
	for (int i = 0; i < k; i++)
	{
		for (int j = 0; j < k; j++)
		{
			ans.a[i][j]=a[i][j] + m.a[i][j];
		}
	}
	return ans;
}
int main()
{
	int k;
	cin >> k;
	Matrix a(k),b(k);
	cin >> a;
	cin >> b;
	cout << a + b;
}