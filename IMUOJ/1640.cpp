#include<iostream>
#include<string>
using namespace std;
class score
{
	string num;
	int Math;
	int English;
	int Programming;
	int AvScore;
public:
	void inscore();
	void showscore();
};
void score::inscore()
{
	cin >> num >> Math >> English >> Programming;
	AvScore = (Math + English + Programming) / 3;
}
void score::showscore()
{
	cout << num << " " << Math << " " << English << " " << Programming << " " << AvScore << endl;
}
int main()
{
	score *p;
	int n;
	cin >> n;
	p = new score[n];
	for (int i = 0; i < n; i++)
	{
		p[i].inscore();
	}
	for (int i = 0; i < n; i++)
	{
		p[i].showscore();
	}
	cout << n;
}