#include<iostream>
using namespace std;
class matrix
{
public:
	int n;
	int a[100][100];
	matrix(int x) { n = x; }
	void traverse()
	{
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cout << a[j][i] << " ";
			}
			cout << endl;
		}
	}
	friend ostream &operator<<(ostream &output, const matrix &m);
	friend istream &operator>>(istream &input, matrix &m);
};

ostream &operator<<(ostream &output, const matrix &m)
{
	for (int i = 0; i < m.n; i++)
	{
		for (int j = 0; j < m.n; j++)
		{
			output << m.a[i][j]<<" ";
		}
		output << endl;
	}
	return output;
}
istream &operator>>(istream &input, matrix &m) 
{
	for (int i = 0; i < m.n; i++)
	{
		for (int j = 0; j < m.n; j++)
		{
			input >> m.a[i][j];
		}
	}
	return input;
}
int main()
{
	int n;
	cin >> n;
	matrix a(n);	
	cin >> a;
	cout << a << endl;
	a.traverse();
	cout << endl;
	return 0;
}