#include<iostream>
using namespace std;
int main()
{
	int ah, am, as, bh, bm, bs;
	int a, b,s;
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> ah >> am >> as >> bh >> bm >> bs;
		a = ah * 3600 + am * 60 + as;
		b = bh * 3600 + bm * 60 + bs;
		s = a + b;
		cout << s / 3600 << " " << s / 60 % 60 << " " << s % 60 << endl;
	}
}